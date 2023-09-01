using System.Collections;
using System.Collections.Generic;
using UnityEngine;

public class UsingInstantiate : MonoBehaviour
{
    public Rigidbody Object;
    public Transform Spawner;
    // Update is called once per frame
    void Update()
    {
            Rigidbody rocketInstance;
            rocketInstance = Instantiate(Object, Spawner.position, Spawner.rotation) as Rigidbody;
            //rocketInstance.AddForce(Spawner.forward * 5000);

    }
}
