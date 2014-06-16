class SessionsController < ApplicationController
	def new
	end

	def show
	end
	
	def index
	end
	
	def create
		user = User.authenticate(params[:username], params[:password])
		if user
			session[:user_id] = user.id
			render 'profile'
		else
			flash.now.alert = "Invalid username or password"
			render 'loginFail'
		end
	end

	def destroy
		session[:user_id] = nil
		render 'new'
	end
	
	def updateUser
		user = User.find(session[:user_id])
		if user
			user.fullname = params[:fullname]
			user.birthplace = params[:birthplace]
			user.birthdate = params[:birthdate]
			user.city = params[:city]
			user.hobby = params[:hobby]
			user.save
			render 'profile'
		else
			#supposed error
		end
	end
	
	def createPesan
		user = User.find_by_username(params[:receiver])
		if user
			pesan = Pesan.new
			pesan.receiver = params[:receiver]
			user = User.find(session[:user_id])
			pesan.sender = user.username
			pesan.text = params[:text]
			pesan.save
			render 'sendSuccess'
		else
			render 'MsgError'
		end
	end
	
	def profile
		render 'profile'
	end
	
	def wall
		render 'wall'
	end
	
	def message
		render 'message'
	end
	
	def search
		@current_search ||= User.where(["username = ?", params[:search]]).select("*").all.order(fullname: :asc)
		user = User.find(session[:user_id])
		#@isfollow ||= Connection.where(["follower = ? and following = ?", user.username, params[:search]])
		render 'search'
	end
	
	def chat
		user = User.find(session[:user_id])
		@suggestion ||= User.where(["gender != ?",user.gender])
		render 'chat'
	end
	
	def edit_profile
		render 'edit_profile'
	end
	
	def friend
		user = User.find(session[:user_id])
		@following ||= Connection.where(["follower = ?", user.username])
		render 'friend'
	end
	
	def addFriend
		user = User.find(session[:user_id])			
		connection = Connection.new
		connection.follower = user.username
		connection.following = params[:add]
		connection.save
		redirect_to friend_path
	end
	
	def deleteFriend	
		user = User.find(session[:user_id])
		#@deleting = 
		#Connection.destroy_all.(:follower => user.username, :following => params[:delete])
		Connection.where(["follower = ? and following = ?", user.username, params[:delete]]).destroy_all
		#@deleting.destroy
		redirect_to friend_path
	end
	
	def current_user
		@current_user ||=  session[:user_id] && User.find(session[:user_id])
	end
	
	def current_inbox
		@current_inbox ||= current_user && Pesan.where(["receiver = ?", current_user.username]).select("sender, text, created_at").all.order(created_at: :desc)
	end
	
	private
	def update_params
		params.permit(:fullname, :birthplace, :birthdate, :city, :hobby)
	end
end
