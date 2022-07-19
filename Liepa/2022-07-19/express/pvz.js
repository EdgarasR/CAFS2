app.get("/", function (req, res) {
  res.send("Hello world");
});

function getUserFromDB(userId) {
  return {
    id: userId,
    name: (Math.random() + 1).toString(36).substring(7),
    createdAt: new Date(),
  };
}

app.get("/user/:userId", function (req, res) {
  res.send(getUserFromDB(req.params.userId));
});
