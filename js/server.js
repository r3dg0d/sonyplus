const express = require('express');
const app = express();
const port = 5501;

app.use(express.static('public'));

app.listen(port, () => {
  console.log(`File hosting and serving server listening at http://localhost:${port}`);
});
