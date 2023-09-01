using System.Collections;
using System.Collections.Generic;
using UnityEngine;

public class ExplosionKnockback : MonoBehaviour
{
    public GameObject Explosion;
    public float ExplosionForce, Radius;

    private void OnCollisionEnter(Collision other)
    {
        GameObject _Explosion = Instantiate(Explosion, transform.position, transform.rotation);
        Destroy(_Explosion, 3);
    }
}
