using UnityEngine;

/// <summary>
/// Simply moves the current game object
/// </summary>
public class MoveScript : MonoBehaviour
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

	private Vector2 tempMov;

	private Vector2 movement;

	private Vector2 lastdirection;

	private bool entered = false;

	private bool mentok = false;

	private bool moved = false;

	void Update()
	{
		// 2 - Movement
		if (transform.position.x < -100) {
						Destroy (gameObject);
				} else {
						if ((movement.x == 0 && movement.y == 0) && moved) {
								movement = tempMov;
						}
			else{
				moved = true;
				movement = new Vector2(speed.x * direction.x, speed.y * direction.y);
				lastdirection = new Vector2();
				lastdirection.Set (direction.x,direction.y);
			}
				}
	}
	
	void FixedUpdate()
	{
		// Apply movement to the rigidbody
		rigidbody2D.velocity = movement;
	}

	void OnCollisionEnter2D (Collision2D hit){
		string name = hit.gameObject.name;
		tempMov = movement;
		movement = new Vector2 (0, 0);
		if ((name == "player") && (!mentok)) {
						mentok = true;
						if (direction.Equals (new Vector2 (-1, 0))) {
								transform.position.x += 0.2f;
								direction.Set (0, 1);
						} else if (direction.Equals (new Vector2 (0, 1))) {
								transform.position.y -= 0.2f;
								direction.Set (1, 0);
						} else if (direction.Equals (new Vector2 (1, 0))) {
								transform.position.x -= 0.2f;
								direction.Set (0, -1);
						} else if (direction.Equals (new Vector2 (0, -1))) {
								direction.Set (-1, 0);
								transform.position.y += 0.2f;
						}
		} else if ((lastdirection.x == direction.x && lastdirection.y == direction.y) && mentok) {
			direction.Set (0,0);
				}
	}
}
