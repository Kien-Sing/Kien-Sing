using System.Collections;
using System.Collections.Generic;
using UnityEngine;

public class Coinball : MonoBehaviour
{
    public int coins;
    public Coinball script;
    public GameObject CoinBall;
    private void OnTriggerEnter(Collider Col)
    {

        if (Col.gameObject.tag == "Coinball")
        {
            Debug.Log("Coin collected!");
            //InventoryUI.coins = InventoryUI.coins + 1;
            InventoryUI.CollectCoin();
            //InventoryUI.UpdateCoinballText(this);
            //playerInventory.CoinBallsCollected();
            Destroy(Col.gameObject);
            CoinBall2Spawn();
        }
    }
    public void CoinBall2Spawn()
    {
        for (int i = 0; i < 1; i++)
        {
            Vector3 v3 = new Vector3(Random.Range(83, 76), Random.Range(1, 1), Random.Range(59, 51));
            Instantiate(CoinBall, v3, Quaternion.identity);
        }
    }
}
//public class Coinball : MonoBehaviour
//{
//    public int coins;

//    private void OnTriggerEnter(Collider Col)
//    {

//        if (Col.gameObject.tag == "Coinball")
//        {
//            Debug.Log("Coin collected!");
//            coins = coins + 1;
//            //playerInventory.CoinBallsCollected();
//            Destroy(Col.gameObject);
//        }
//    }
//}
