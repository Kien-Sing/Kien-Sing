using System.Collections;
using System.Collections.Generic;
using UnityEngine;

public class DestroyBoards : MonoBehaviour
{
    public GameObject DBoardText;
    public GameObject NoObject;
    [SerializeField] private Camera PlayerCamera;
    [SerializeField] private float PickupRange;


    private Rigidbody CurrentObjectRigidbody;
    private Collider CurrentObjectCollider;

    void Update()
    {
        if (Input.GetKeyDown(KeyCode.E))
        {
            Ray Pickupray = new Ray(PlayerCamera.transform.position, PlayerCamera.transform.forward);

            if (Physics.Raycast(Pickupray, out RaycastHit hitInfo, PickupRange))
            {
                GameObject gameObjectReference = GameObject.Find("HToyHammer");
                if (gameObjectReference != null && gameObjectReference.activeInHierarchy)
                {
                    GameObject objectToDestroy = NoObject;
                    if (objectToDestroy != null)
                    {
                        Destroy(objectToDestroy);
                        Destroy(gameObjectReference);
                        DBoardText.SetActive(true);
                        StartCoroutine(EndText());
                    }
                }
            }

        }
    }
    //private void OnTriggerEnter(Collider other){}
    IEnumerator EndText()
    {
        yield return new WaitForSeconds(6f);
        DBoardText.SetActive(false);
        //Destroy(gameObject);
    }
}
