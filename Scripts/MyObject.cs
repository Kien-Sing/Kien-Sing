using System.Collections;
using System.Collections.Generic;
using UnityEngine;

    public class MyObject : MonoBehaviour
    {
        private bool isDetectingCollision = false;

        private void OnCollisionEnter(Collision collision)
        {
            if (!isDetectingCollision)
            {
                // Handle the actual collision here
                Debug.Log("Collision occurred");
            }
        }

        private void OnTriggerEnter(Collider other)
        {
            if (other.CompareTag("DetectionCollider"))
            {
                isDetectingCollision = true;
                // Handle detection collision here
                Debug.Log("Detection collision occurred");
            }
        }

        private void OnTriggerExit(Collider other)
        {
            if (other.CompareTag("DetectionCollider"))
            {
                isDetectingCollision = false;
            }
        }
    }


