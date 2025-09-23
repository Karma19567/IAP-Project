const users = [];

exports.getAllUsers = (req, res) => {
  res.json(users);
};

exports.addUser = (req, res) => {
  const user = req.body;
  users.push(user);
  res.status(201).json({ message: "User added!", user });
};
