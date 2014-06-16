using UnityEngine;

/// <summary>
/// Simply moves the current game object
/// </summary>
public class MissileMoveScript : MonoBehaviour
{
	// 1 - Designer variables
	
	/// <summary>
	/// Object speed
	/// </summary>
	public Vector2 speed = new Vector2(10, 10);
	
	/// <summary>
	/// Moving direction
	/// </summary>
	
	public Vector2 direction = new Vector2(-1, 0);
	
	private Vector2 movement;
	
	void Update()
	{
		// 2 - Movement
		movement = new Vector2(
			speed.x * direction.x,
			speed.y * direction.y);
		float mir;
		mir = - Mathf.Sqrt(Mathf.Abs(transform.position.x - GameObject.Find("poulpi").transform.position.x) +
		                   Mathf.Abs(transform.position.y - GameObject.Find("poulpi").transform.position.y)
		                   );
		direction = new Vector2((transform.position.x - GameObject.Find("poulpi").transform.position.x) / mir,
		                        (transform.position.y - GameObject.Find("poulpi").transform.position.y) / mir);
	}
	
	void FixedUpdate()
	{
		// Apply movement to the rigidbody
		rigidbody2D.velocity = movement;
	}
}