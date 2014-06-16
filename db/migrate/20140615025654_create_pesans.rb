class CreatePesans < ActiveRecord::Migration
  def change
    create_table :pesans do |t|
      t.string :receiver
      t.string :sender
      t.text :text

      t.timestamps
    end
  end
end
