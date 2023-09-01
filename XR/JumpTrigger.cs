using System.Collections;
using System.Collections.Generic;
using UnityEngine;

public class JumpTrigger : MonoBehaviour
{
   // public AudioSource Voice;
    public GameObject FlashImg;
    private void OnTriggerEnter(Collider other)
    {
    //    Voice.Play();
        FlashImg.SetActive(true);
        StartCoroutine(EndJump());

    }
    IEnumerator EndJump()
    {
        yield return new WaitForSeconds(0.3f);
        FlashImg.SetActive(false);
        Destroy(gameObject);
    }
}
