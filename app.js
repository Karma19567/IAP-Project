const express = require("express");
const app = express();

app.use(express.json());

// Import routes
const bookRoutes = require("./routes/bookRoutes");
const userRoutes = require("./routes/userRoutes");

app.use("/books", bookRoutes);
app.use("/users", userRoutes);

app.get("/", (req, res) => {
  res.send("Library Management System API");
});

module.exports = app;
