using System.Collections;
using System.Collections.Generic;
using UnityEngine;

public class DetectionCollider : MonoBehaviour
{
    public GameObject Rocket;
    public GameObject Explosion;
    public float ExplosionForce, Radius;
    public AudioClip explosionSound; // Reference to the explosion sound clip
    private bool hasExploded = false;
    private AudioSource audioSource; // Reference to the AudioSource component

    private void Start()
    {
        // Get the AudioSource component attached to the same GameObject or add one if it doesn't exist
        audioSource = GetComponent<AudioSource>();
        if (audioSource == null)
            audioSource = gameObject.AddComponent<AudioSource>();
    }

    private void OnTriggerEnter(Collider other)
    {
        if (other.CompareTag("Brick"))
        {
            Debug.Log("Detection collision occurred with Brick");
            Destroy(other.gameObject); // Destroy the Brick immediately
        }
        else if (other.CompareTag("Cement"))
        {
            Debug.Log("Detection collision occurred with Cement");
            Destroy(other.gameObject); // Destroy the Cement immediately

            if (!hasExploded)
            {
                StartCoroutine(ExpEFFCoroutine());
                hasExploded = true;
            }
        }
    }

    IEnumerator ExpEFFCoroutine()
    {
        yield return new WaitForSeconds(0.01f);
        GameObject _Explosion = Instantiate(Explosion, transform.position, transform.rotation);
        Destroy(_Explosion, 3);
        Knockback();

        // Play the explosion sound
        audioSource.PlayOneShot(explosionSound);
    }

    void Knockback()
    {
        Collider[] colliders = Physics.OverlapSphere(transform.position, Radius);

        foreach (Collider nearby in colliders)
        {
            if (nearby.CompareTag("Brick"))
            {
                Destroy(nearby.gameObject); // Destroy nearby Bricks
            }
        }
    }
}


//using System.Collections;
//using System.Collections.Generic;
//using UnityEngine;



//public class DetectionCollider : MonoBehaviour
//{
//    public GameObject Rocket;
//    public GameObject Explosion;
//    public float ExplosionForce, Radius;
//    private bool hasExploded = false;

//    private void OnTriggerEnter(Collider other)
//    {
//        if (other.CompareTag("Brick"))
//        {
//            Debug.Log("Detection collision occurred with Brick");
//            Destroy(other.gameObject); // Destroy the Brick immediately
//        }
//        else if (other.CompareTag("Cement"))
//        {
//            Debug.Log("Detection collision occurred with Cement");
//            Destroy(other.gameObject); // Destroy the Cement immediately

//            if (!hasExploded)
//            {
//                StartCoroutine(ExpEFFCoroutine());
//                hasExploded = true;
//            }
//        }
//    }

//    IEnumerator ExpEFFCoroutine()
//    {
//        yield return new WaitForSeconds(0.01f);
//        GameObject _Explosion = Instantiate(Explosion, transform.position, transform.rotation);
//        Destroy(_Explosion, 3);
//        Knockback();
//    }

//    void Knockback()
//    {
//        Collider[] colliders = Physics.OverlapSphere(transform.position, Radius);

//        foreach (Collider nearby in colliders)
//        {
//            if (nearby.CompareTag("Brick"))
//            {
//                Destroy(nearby.gameObject); // Destroy nearby Bricks
//            }
//        }
//    }
//}

//public class DetectionCollider : MonoBehaviour
//{
//    public GameObject Rocket;
//    public GameObject Explosion;
//    public float ExplosionForce, Radius;
//    private bool hasExploded = false; // Flag to track if explosion has occurred

//    IEnumerator DestroyCoroutine()
//    {
//        yield return new WaitForSeconds(0.05f);
//        Destroy(Rocket);
//    }

//    IEnumerator ExpEFFCoroutine()
//    {
//        yield return new WaitForSeconds(0.01f);
//        GameObject _Explosion = Instantiate(Explosion, transform.position, transform.rotation);
//        Destroy(_Explosion, 3);
//        Knockback();
//        hasExploded = true; // Set the flag to true after the explosion occurs
//    }

//    IEnumerator Wait()
//    {
//        yield return new WaitForSeconds(5);
//    }

//    private void OnTriggerEnter(Collider other)
//    {
//        if (other.tag == "Brick")
//        {
//            SphereCollider collider = Rocket.GetComponent<SphereCollider>();
//            collider.radius = 5f;
//            Debug.Log("Detection collision occurred with Brick");
//            other.GetComponent<Rigidbody>().isKinematic = false;
//            StartCoroutine(DestroyCoroutine());

//            if (!hasExploded) // Only proceed if explosion hasn't occurred yet
//            {
//                StartCoroutine(Wait());
//                if (other.tag == "Brick")
//                {
//                    Destroy(other.gameObject);
//                }
//            }
//        }
//        else if (other.CompareTag("Cement"))
//        {
//            Debug.Log("Detection collision occurred with Cement");
//            Destroy(other.gameObject);

//            if (!hasExploded) // Only proceed if explosion hasn't occurred yet
//            {
//                StartCoroutine(ExpEFFCoroutine());
//            }
//        }
//    }

//    void Knockback()
//    {
//        Collider[] colliders = Physics.OverlapSphere(transform.position, Radius);

//        foreach (Collider nearby in colliders)
//        {
//            Rigidbody Rigid = nearby.GetComponent<Rigidbody>();
//            if (Rigid != null)
//            {
//                Rigid.AddExplosionForce(ExplosionForce, transform.position, Radius);
//            }
//        }
//    }
//}




//using System;
//using System.Collections;
//using System.Collections.Generic;
//using UnityEngine;

//public class DetectionCollider : MonoBehaviour
//{
//    public GameObject[] Brick;
//    Brick = GameObject.FindGameObjectsWithTag("Enemy");

//    private void OnTriggerEnter(Collider other)
//    {
//        if (other.CompareTag("Brick"))
//        {
//            // Handle detection collision with Brick here
//            Debug.Log("Detection collision occurred with Brick");

//            Brick = GameObject.FindGameObjectsWithTag(tagname);
//            Brick.GetComponent<Rigidbody>().isKinematic = false;
//        }
//        else if (other.CompareTag("Cement"))
//        {
//            // Handle detection collision with Cement here
//            Debug.Log("Detection collision occurred with Cement");
//            Destroy(GameObject.FindWithTag("Cement"));
//        }
//    }
//}

