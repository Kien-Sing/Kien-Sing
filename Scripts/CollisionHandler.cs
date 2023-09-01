using System.Collections;
using System.Collections.Generic;
using UnityEngine;

public class CollisionHandler : MonoBehaviour
{
    public string rocketTag = "Rocket";
    public string brickTag = "Brick";
    public string cementTag = "Cement";
    public float addedMass = 1f;

    private Rigidbody rb;

    private void Start()
    {
        rb = GetComponent<Rigidbody>();
        rb.isKinematic = true; // Set Rigidbody to be inactive at the start
    }

    private void OnCollisionEnter(Collision collision)
    {
        if (collision.gameObject.CompareTag(rocketTag))
        {
            if (collision.gameObject.CompareTag(brickTag))
            {
                if (rb != null)
                {
                    rb.isKinematic = false; // Set Rigidbody to be active
                    rb.mass += addedMass;

                }
            }
            else if (collision.gameObject.CompareTag(cementTag))
            {
                Destroy(collision.gameObject);
            }
        }
    }

}
