using System.Collections;
using System.Collections.Generic;
using UnityEngine;

public class TeleportPlayer : MonoBehaviour
{
    [SerializeField] GameObject TP0;
    [SerializeField] GameObject TP1;

    Vector3 TP0Location;
    Vector3 TP1Location;
    // Start is called before the first frame update
    void Start()
    {
        TP0Location = TP0.transform.position;
        TP1Location = TP1.transform.position;
    }

    // Update is called once per frame
    void Update()
    {
        
    }
}
