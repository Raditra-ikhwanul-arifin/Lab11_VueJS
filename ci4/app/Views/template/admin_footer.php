<style>
/* Footer Styles */
footer {
  background-color: #343a40; /* Dark grey similar to the image */
  padding: 2rem 0;
  /* margin-top: 3rem; Remove or adjust as needed for overall layout */
  /* border-top: 1px solid #e5e7eb; Remove border-top */
  /* box-shadow: 0 -4px 6px -1px rgba(0, 0, 0, 0.05); Remove box-shadow */
}

footer p {
  text-align: center;
  color: #f8f9fa; /* Light color for text to contrast with dark background */
  font-size: 0.875rem;
  margin: 0;
}

/* Section Styles - Keeping these as they were, assuming they are for other parts of the page */
section {
  padding: 2rem 0;
  max-width: 1200px;
  margin: 0 auto;
}

/* Container Styles */
.container {
  width: 100%;
  max-width: 1200px;
  margin: 0 auto;
  padding: 0 1.5rem;
}

/* Responsive Design */
@media (max-width: 768px) {
  section {
    padding: 1.5rem 0;
  }

  .container {
    padding: 0 1rem;
  }
}

/* Modern Enhancements - Removed footer specific ones, kept section animation */
/* footer {
  box-shadow: 0 -4px 6px -1px rgba(0, 0, 0, 0.05);
  background-color: #f9fafb;
} */

section {
  animation: fadeIn 0.5s ease-out;
}

@keyframes fadeIn {
  from {
    opacity: 0;
    transform: translateY(10px);
  }

  to {
    opacity: 1;
    transform: translateY(0);
  }
}
</style>

<footer>
  <div class="container">
    <p>&copy; 2025- Universitas Pelita Bangsa</p>
  </div>
</footer>
