class Users < ActiveRecord::Base
	validates :username, :password, :fullname, :birthplace, :birthdate, :city, :hobby, presence: true
	validates :username, uniqueness: true
end
