using System.Collections;
using System.Collections.Generic;
using UnityEngine;

public class SetLevelActive : MonoBehaviour
{
    [SerializeField] GameObject _Parent;
    //[SerializeField] GameObject TObject;
    // Start is called before the first frame update
    void Start()
    {
        
    }

    // Update is called once per frame 
    void OnTriggerEnter(Collider other)
    {
        Debug.Log("Collision Done!");
        if (other.tag == "Level")
        {
            Debug.Log("Tag Found!");
            Debug.Log("Set True");
            _Parent.SetActive(true);
            //Destroy(TObject);
        }
    }
}
