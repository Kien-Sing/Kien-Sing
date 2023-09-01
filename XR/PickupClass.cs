using System.Collections;
using System.Collections.Generic;
using UnityEngine;

public class PickupClass : MonoBehaviour
{

    [SerializeField] private LayerMask PickupLayer;
    [SerializeField] private Camera PlayerCamera;
    [SerializeField] private float PickupRange;
    [SerializeField] private Transform Hand;


    public GameObject PickupObject;
    public static bool IsHide = false;
    public GameObject NoObject;

    private Rigidbody CurrentObjectRigidbody;
    private Collider CurrentObjectCollider;

    void Update()
    {
        if (Input.GetKeyDown(KeyCode.E))
        {
            Ray Pickupray = new Ray(PlayerCamera.transform.position, PlayerCamera.transform.forward);

            if (Physics.Raycast(Pickupray, out RaycastHit hitInfo, PickupRange))
            {
                if (IsHide)
                {
                    PickupObject.SetActive(false);
                    NoObject.SetActive(true);

                    //CurrentObjectRigidbody.isKinematic = false;
                    //CurrentObjectCollider.enabled = true;

                    //CurrentObjectRigidbody = hitInfo.rigidbody;
                    //CurrentObjectCollider = hitInfo.collider;

                    //CurrentObjectRigidbody.isKinematic = true;
                    //CurrentObjectCollider.enabled = false;
                }
                else
                {
                    PickupObject.SetActive(true);
                    NoObject.SetActive(false);
                    GetComponent<DestroyBoards>().enabled = true;
                    //NoObject.SetActive(false);
                    //    CurrentObjectRigidbody = hitInfo.rigidbody;
                    //    CurrentObjectCollider = hitInfo.collider;

                    //    CurrentObjectRigidbody.isKinematic = true;
                    //    CurrentObjectCollider.enabled = false;
                }
            }

        }
        if(CurrentObjectRigidbody)
        {
            CurrentObjectRigidbody.position = Hand.position;
            CurrentObjectRigidbody.rotation = Hand.rotation;
        }
    }

}
