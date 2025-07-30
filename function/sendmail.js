const nodemailer = require('nodemailer');

exports.handler = async (event, context) => {
  const data = JSON.parse(event.body);
  const { name, email, message } = data;

  const transporter = nodemailer.createTransport({
    service: 'Gmail',
    auth: {
      user: 'yourgmail@gmail.com',
      pass: 'your-app-password', // Use an app password if Gmail
    },
  });

  const mailOptions = {
    from: email,
    to: 'info@omegalord.com',
    subject: `Message from ${name}`,
    text: message,
  };

  try {
    await transporter.sendMail(mailOptions);
    return { statusCode: 200, body: JSON.stringify({ success: true }) };
  } catch (error) {
    return { statusCode: 500, body: JSON.stringify({ error: error.message }) };
  }
};