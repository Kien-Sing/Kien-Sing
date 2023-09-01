using System.Collections;
using System.Collections.Generic;
using UnityEngine;

public class PickUpBattery : MonoBehaviour
{
    [SerializeField] private Camera PlayerCamera;
    [SerializeField] private float PickupRange;

    public GameObject NoObject;

    private Rigidbody CurrentObjectRigidbody;
    private Collider CurrentObjectCollider;
    //Light lightComponent;

    void Start()
    {
        //lightComponent = GetComponentInChildren<Light>();
    }

    void Update()
    {
        if (Input.GetKeyDown(KeyCode.R))
        {
            Ray Pickupray = new Ray(PlayerCamera.transform.position, PlayerCamera.transform.forward);

            if (Physics.Raycast(Pickupray, out RaycastHit hitInfo, PickupRange))
            {
                    Destroy(NoObject);
                    Flashlight.lightIntensity += 1f;
                GameObject objectToDestroy = GameObject.Find("PickupText[R]");
                Destroy(objectToDestroy);
            }
        }
    }
}
