using System.Collections;
using System.Collections.Generic;
using UnityEngine;

public class BoardsText : MonoBehaviour
{
    public GameObject BoardText;
    private void OnTriggerEnter(Collider other)
    {
        BoardText.SetActive(true);
        StartCoroutine(EndText());

    }
    IEnumerator EndText()
    {
        yield return new WaitForSeconds(6f);
        BoardText.SetActive(false);
        GameObject objectToDestroy = GameObject.Find("Board text");
        Destroy(objectToDestroy);
        Destroy(gameObject);
    }
}

