const form = document.getElementById('contact-form');
  form.addEventListener('submit', async (e) => {
    e.preventDefault();
    const formData = new FormData(form);
    const data = Object.fromEntries(formData.entries());

    const res = await fetch('functions/sendEmail', {
      method: 'POST',
      body: JSON.stringify(data),
    });

    if (res.ok) {
      alert('Message sent!');
    } else {
      alert('Failed to send message.');
    }
  });