class User < ActiveRecord::Base
	validates :username, :password, :fullname, :birthplace, :birthdate, :city, :hobby, presence: true
	validates :username, uniqueness: true
	
	def self.authenticate(username, password)
		user = find_by_username(username)
		if user && user.password == password
			user
		else
			nil
		end
	end
end
