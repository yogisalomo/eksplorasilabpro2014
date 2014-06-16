Rails.application.routes.draw do
  
  resources :users
  resources :sessions
  resources :pesans
  
  get 'users/new'
  get 'users/registerError'
  get 'users/create'
  
  get 'sessions/new'
  get 'sessions/loginFail'
  get 'sessions/profile'  
  
  get 'sessions/wall'
  get 'sessions/chat'
  get 'sessions/update'
  get 'sessions/friend'
  get 'sessions/current_inbox'
  get 'sessions/search'
  
  get "profile" => "sessions#profile", :as => "profile"
  get "wall" => "sessions#wall", :as => "wall"
  get "edit_profile" => "sessions#update", :as => "edit_profile"
  get "friend" => "sessions#friend", :as => "friend"
  get "chat" => "sessions#chat", :as => "chat"
  get "message" => "sessions#current_inbox", :as => "message"
  
  get "log_out" => "sessions#destroy", :as => "log_out"
  get "log_in" => "sessions#new", :as => "log_in"
  get "sign_up" => "users#new", :as => "sign_up"
  get "composeMessage" => "sessions#composeMessage", :as => "composeMessage"
  get "sendSuccess" => "sessions#sendSuccess", :as => "sendSuccess"
  
  post "search" => "sessions#search", :as => "search"
  post "addFriend" => "sessions#addFriend", :as => "addFriend"
  post "deleteFriend" => "sessions#deleteFriend", :as => "deleteFriend"
  post "createPesan" => "sessions#createPesan", :as => "createPesan"
  post "userEdit" => "sessions#updateUser", :as => "userEdit"
  
  # The priority is based upon order of creation: first created -> highest priority.
  # See how all your routes lay out with "rake routes".

  # You can have the root of your site routed with "root"
  root 'sessions#new'

  # Example of regular route:
  #   get 'products/:id' => 'catalog#view'

  # Example of named route that can be invoked with purchase_url(id: product.id)
  #   get 'products/:id/purchase' => 'catalog#purchase', as: :purchase

  # Example resource route (maps HTTP verbs to controller actions automatically):
  #   resources :products

  # Example resource route with options:
  #   resources :products do
  #     member do
  #       get 'short'
  #       post 'toggle'
  #     end
  #
  #     collection do
  #       get 'sold'
  #     end
  #   end

  # Example resource route with sub-resources:
  #   resources :products do
  #     resources :comments, :sales
  #     resource :seller
  #   end

  # Example resource route with more complex sub-resources:
  #   resources :products do
  #     resources :comments
  #     resources :sales do
  #       get 'recent', on: :collection
  #     end
  #   end

  # Example resource route with concerns:
  #   concern :toggleable do
  #     post 'toggle'
  #   end
  #   resources :posts, concerns: :toggleable
  #   resources :photos, concerns: :toggleable

  # Example resource route within a namespace:
  #   namespace :admin do
  #     # Directs /admin/products/* to Admin::ProductsController
  #     # (app/controllers/admin/products_controller.rb)
  #     resources :products
  #   end
end
