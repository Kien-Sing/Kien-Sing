using System.Collections;
using System.Collections.Generic;
using UnityEngine;

public class PickupText : MonoBehaviour
{

    public GameObject PickupTexts;
    public void Start()
    {
        PickupTexts.SetActive(false);
    }
    private void OnTriggerEnter(Collider other)
    {
        PickupTexts.SetActive(true);

    }
    private void OnTriggerExit(Collider other)
    {
        PickupTexts.SetActive(false);
    }
}
