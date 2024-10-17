function Player(name, position, goalsScored) {
    this.name = name;
    this.position = position;
    this.goalsScored = goalsScored; 
}

function Team(teamName) {
    this.teamName = teamName;
    this.players = [];
}

// Instance method to add a player
Team.prototype.addPlayer = function(player) {
    this.players.push(player);
};

// Instance method to calculate total goals
Team.prototype.calculateTotalGoals = function() {
    return this.players.reduce((total, player) => total + player.goalsScored, 0);
};

const team = new Team("Liverpool");

team.addPlayer(new Player("Sasha", "Forward", 10));
team.addPlayer(new Player("Luwiz", "Midfielder", 5));
team.addPlayer(new Player("Konate", "Defender", 1));

const totalGoals = team.calculateTotalGoals();
console.log(`Total goals scored by ${team.teamName}: ${totalGoals}`);