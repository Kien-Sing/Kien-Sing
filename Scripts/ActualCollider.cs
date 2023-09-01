using System.Collections;
using System.Collections.Generic;
using UnityEngine;

public class ActualCollider : MonoBehaviour
{
    private void OnCollisionEnter(Collision collision)
    {
        // Handle the actual collision here
        Debug.Log("Collision occurred");
    }
}


