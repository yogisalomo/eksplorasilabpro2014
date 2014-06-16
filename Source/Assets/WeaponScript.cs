using UnityEngine;

/// <summary>
/// Launch projectile
/// </summary>
public class WeaponScript : MonoBehaviour
{
	//--------------------------------
	// 1 - Designer variables
	//--------------------------------
	
	/// <summary>
	/// Projectile prefab for shooting
	/// </summary>
	public Transform shotPrefab;
	
	/// <summary>
	/// Cooldown in seconds between two shots
	/// </summary>
	public float shootingRate = 0.25f;
	
	//--------------------------------
	// 2 - Cooldown
	//--------------------------------
	
	private float shootCooldown;
	
	void Start()
	{
		shootCooldown = 1f;
	}
	
	void Update()
	{
		if (shootCooldown > 0)
		{
			shootCooldown -= Time.deltaTime;
		}
	}
	
	//--------------------------------
	// 3 - Shooting from another script
	//--------------------------------
	
	/// <summary>
	/// Create a new projectile if possible
	/// </summary>
	public void Attack(bool isEnemy)
	{
		if (CanAttack)
		{
			shootCooldown = shootingRate;
			
			// Create a new shot
			var shotTransform = Instantiate(shotPrefab) as Transform;
	
			
			// Assign position
			shotTransform.position = new Vector3(transform.position.x + 3, transform.position.y, transform.position.z);
			// The is enemy property
			ShotScript shot = shotTransform.gameObject.GetComponent<ShotScript>();
			if (shot != null)
			{
				shot.isEnemyShot = isEnemy;
			}
			
			// Make the weapon shot always towards it
			MissileMoveScript move = shotTransform.gameObject.GetComponent<MissileMoveScript>();
			float mir;
			mir = - Mathf.Sqrt(Mathf.Abs(transform.position.x - GameObject.Find("poulpi").transform.position.x) +
			                 Mathf.Abs(transform.position.y - GameObject.Find("poulpi").transform.position.y)
			                 ); 
			if (move != null)
			{
				move.direction = new Vector2((transform.position.x - GameObject.Find("poulpi").transform.position.x) / mir,
				                             (transform.position.y - GameObject.Find("poulpi").transform.position.y) / mir); // towards in 2D space is the right of the sprite
			}
		}
	}
	
	/// <summary>
	/// Is the weapon ready to create a new projectile?
	/// </summary>
	public bool CanAttack
	{
		get
		{
			return shootCooldown <= 0f;
		}
	}
}