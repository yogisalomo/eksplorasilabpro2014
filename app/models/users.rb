class Users < ActiveRecord::Base
	attr_accessor :username, :password, :fullname, :birthplace, :birthdate, :city, :hobby, :gender

  validates_presence_of :username
  validates_presence_of :password
  validates_presence_of :fullname
  validates_presence_of :birthplace
  validates_presence_of :birthdate
  validates_presence_of :city
  validates_presence_of :hobby
  validates_presence_of :gender

  def save(hsh = {})
    hsh.each do |key, value|
      self.send(:"#{key}=", value)
    end
  end
end
