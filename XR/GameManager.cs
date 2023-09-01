using System.Collections;
using System.Collections.Generic;
using UnityEngine;

public class GameManager : MonoBehaviour
{
        public Coinball script;
        public GameObject CoinBall;
        // Start is called before the first frame update
        //Vector3 v3 = new Vector3(Random.Range(-10, 10),Random.Range(-10,10));
        //Instantiate(Scrap ,v3, Quaternion.identity);
        // Start is called before the first frame update
        void Start()
        {
          CoinBallSpawn();
        }
        // Update is called once per frame
        private void Update()
        {
            
        }
        public void CoinBallSpawn()
        {
            for (int i = 0; i < 10; i++)
            {
                Vector3 v3 = new Vector3(Random.Range(83, 76), Random.Range(1, 1), Random.Range(59, 51));
                Instantiate(CoinBall, v3, Quaternion.identity);
            }
        }
    }
