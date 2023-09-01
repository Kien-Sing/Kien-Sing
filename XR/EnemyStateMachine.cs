using UnityEngine;

public class EnemyStateMachine : MonoBehaviour
{
    public enum State
    {
        Idle,
        Chase,
        Attack,
        Dead
    }

    public State currentState;
    public Transform target;
    public float chaseRange;
    public float attackRange;

    private void Update()
    {
        switch (currentState)
        {
            case State.Idle:
                Idle();
                break;
            case State.Chase:
                Chase();
                break;
            case State.Attack:
                Attack();
                break;
            case State.Dead:
                Dead();
                break;
        }
    }

    private void Idle()
    {
        // Check if the target is within the chase range
        float distanceToTarget = Vector3.Distance(transform.position, target.position);
        if (distanceToTarget <= chaseRange)
        {
            currentState = State.Chase;
        }
    }

    private void Chase()
    {
        // Move towards the target
        transform.position = Vector3.MoveTowards(transform.position, target.position, Time.deltaTime);

        // Check if the target is within the attack range
        float distanceToTarget = Vector3.Distance(transform.position, target.position);
        if (distanceToTarget <= attackRange)
        {
            currentState = State.Attack;
        }
    }

    private void Attack()
    {
        // Attack the target
    }

    private void Dead()
    {
        // Handle death logic
    }
}