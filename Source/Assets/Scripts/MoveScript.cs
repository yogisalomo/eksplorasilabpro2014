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
		if (name == "player") {
						if (direction.Equals (new Vector2 (-1, 0))) {
								direction.Set (0, 1);
						} else if (direction.Equals (new Vector2 (0, 1))) {
								direction.Set (1, 0);
						} else if (direction.Equals (new Vector2 (1, 0))) {
								direction.Set (0, -1);
						} else if (direction.Equals (new Vector2 (0, -1))) {
								direction.Set (-1, 0);
						}
				}
	}
}
