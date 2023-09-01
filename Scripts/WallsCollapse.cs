using System.Collections;
using System.Collections.Generic;
using UnityEngine;

public class WallsCollapse : MonoBehaviour
{
    public string brickTagName = "Brick";

    private void OnCollisionEnter(Collision collision)
    {
        Debug.Log("Collision Detected");
        if (collision.gameObject.CompareTag(brickTagName))
        {
            Debug.Log(" Brick Collision Detected");
            Transform brickTransform = collision.gameObject.transform.parent;
            if (brickTransform != null && brickTransform.CompareTag(brickTagName))
            {
                Debug.Log("Change Done!");
                Rigidbody brickRigidbody = brickTransform.gameObject.AddComponent<Rigidbody>();
                brickRigidbody.isKinematic = true;

                    // Start function WaitAndPrint as a coroutine
     
            }
        }
        else if (collision.gameObject.CompareTag("Cement"))
        {
            Destroy(collision.gameObject);
        }
    }
}


