class CreateConnections < ActiveRecord::Migration
  def change
    create_table :connections do |t|
      t.string :follower
      t.string :following

      t.timestamps
    end
  end
end
