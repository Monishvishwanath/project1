// app.js

// Sample data of mentors with tags
const mentors = [
    { name: 'John Doe', tags: ['JavaScript', 'CSS', 'React'] },
    { name: 'Jane Smith', tags: ['Python', 'Data Science', 'Machine Learning'] },
    { name: 'Emily Johnson', tags: ['HTML', 'CSS', 'JavaScript'] },
    { name: 'Michael Brown', tags: ['Java', 'Spring', 'Backend'] }
];

const mentees = [];

// Function to add mentee details
function addMentee() {
    const name = document.getElementById('Name').value;
    const menteeTags = document.getElementById('menteeTags').value.split(',').map(tag => tag.trim());

    if (!name || menteeTags.length === 0) {
        alert('Please fill out all fields.');
        return;
    }

    mentees.push({ name: name, tags: menteeTags });

    document.getElementById('menteeForm').reset();
    alert('Mentee added successfully!');
}

// Function to compare tags and find matching mentors
function compareTags() {
    const output = document.getElementById('output');
    output.innerHTML = ''; // Clear previous results

    if (mentees.length === 0) {
        output.innerHTML = '<p>No mentees added yet.</p>';
        return;
    }

    mentees.forEach(mentee => {
        const matches = mentors.filter(mentor => {
            return mentor.tags.some(tag => mentee.tags.includes(tag));
        });

        if (matches.length > 0) {
            output.innerHTML += <h4>Matches for ${mentee.name}:</h4>;
            matches.forEach(mentor => {
                output.innerHTML += <p>Mentor: ${mentor.name} - Tags: ${mentor.tags.join(', ')}</p>;
            });
        } else {
            output.innerHTML += <p>No matches found for ${mentee.name}.</p>;
        }
    });
}
