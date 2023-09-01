using System.Collections;
using System.Collections.Generic;
using UnityEngine;
using UnityEngine.Events;

public class PlayerInventory : MonoBehaviour
{
    public int NumberOfCoinBalls { get; private set; }

    public UnityEvent<PlayerInventory> OnCoinballCollected;

    public void CoinBallsCollected()
    {
        NumberOfCoinBalls++;
        OnCoinballCollected.Invoke(this);
    }
}
