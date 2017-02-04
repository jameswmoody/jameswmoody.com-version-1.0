movies = {
    :"Money Talks" => 3.5,
    :"Pulp Fiction" => 4,
    :"Scarface" => 3,
    :"Friday" => 2,
}

puts "Type 'add' to add a new movie, 'update' to update an existing movie, 'display' to view all existing movies, or 'delete' to get rid of one"

choice = gets.chomp.downcase

case choice
when "add"
    puts "Ok, let's add a new movie! What's the title?"
    title = gets.chomp.to_sym.capitalize

    if movies[title].nil?
        puts "Great! What rating should #{title} have?"
        rating = gets.chomp.to_i
        movies[title] = rating
        puts "#{title} was added with a #{rating} rating!"
    else
        puts "#{title} already exists!"
    end

when "update"
    puts "Alright, what movie would you like to update?"
    title = gets.chomp.to_sym.capitalize

    if movies[title].nil?
        puts "#{title} does not exist."
    else
        puts "What rating would you like to give #{title}?"
        rating = gets.chomp
        movies[title] = rating.to_i
        puts "Cool, #{title} now has a #{rating} rating!"
    end

when "display"
    movies.each { |title, rating| puts "#{title}: #{rating}" } 

when "delete"
    puts "Which movie would you like to delete?"
    title = gets.chomp.to_sym.capitalize

    if movies[title].nil?
        puts "Good news! #{title} does not exist."
    else
        movies.delete(title)
        puts "#{title} was deleted!"
    end

else
    puts "Didn't quite get that...try again."
end
