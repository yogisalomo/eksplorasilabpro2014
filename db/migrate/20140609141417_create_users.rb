class CreateUsers < ActiveRecord::Migration
  def change
    create_table :users do |t|
      t.string :username
      t.string :password
      t.string :fullname
      t.string :birthplace
      t.string :birthdate
      t.string :city
      t.string :hobby
      t.string :gender

      t.timestamps
    end
  end
end
