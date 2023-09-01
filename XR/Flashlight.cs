using System.Collections;
using System.Collections.Generic;
using UnityEngine;

public class Flashlight : MonoBehaviour
{
    public static Light myLight;
    public static float lightIntensity;

    void Start()
    {
        myLight = GetComponent<Light>();
        myLight.intensity = lightIntensity;
        lightIntensity = 1f;
    }



    void Update()
    {
        if (Input.GetKeyDown(KeyCode.F))
        {
            myLight.enabled = !myLight.enabled;
            myLight.spotAngle = 30f;
            myLight.intensity = lightIntensity;
            myLight.range = 50f;
        }
    }
}
