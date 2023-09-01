using System.Collections;
using System.Collections.Generic;
using UnityEngine;
using TMPro;

//public class InventoryUI : MonoBehaviour
//{
//    public Coinball script;
//    private TextMeshProUGUI coinballText;
//    // Start is called before the first frame update
//    void Start()
//    {
//        coinballText = GetComponent<TextMeshProUGUI>();
//    }
//    public static void UpdateCoinballText(Coinball Coinball)
//    {
//        coinballText.text = Coinball.coins.ToString();
//    }
//}
public class InventoryUI : MonoBehaviour
{
    public static int coins;
    public TextMeshProUGUI coinText;
    public static InventoryUI instance;
    // Start is called before the first frame update
    void Awake()
    {
        instance = this;
    }
    void UpdateCoinText()
    {
        coinText.SetText("Coins: " + coins);
    }
    public static void CollectCoin()
    {
        coins++;
        instance.UpdateCoinText();
    }
}
