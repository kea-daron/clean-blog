// Check for saved theme preference or use system preference
if (localStorage.getItem('color-theme') === 'dark' || 
    (!('color-theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
  document.documentElement.classList.add('dark');
  toggleDarkModeIcons(true);
} else {
  document.documentElement.classList.remove('dark');
  toggleDarkModeIcons(false);
}

function toggleDarkModeIcons(isDark) {
  // Desktop icons
  document.getElementById('moon-icon').classList.toggle('hidden', isDark);
  document.getElementById('sun-icon').classList.toggle('hidden', !isDark);
  
  // Mobile icons
  document.getElementById('mobile-moon-icon').classList.toggle('hidden', isDark);
  document.getElementById('mobile-sun-icon').classList.toggle('hidden', !isDark);
}

// Dark mode toggle functionality
document.getElementById('theme-toggle').addEventListener('click', toggleDarkMode);
document.getElementById('mobile-theme-toggle').addEventListener('click', toggleDarkMode);

function toggleDarkMode() {
  // Toggle dark class on html element
  document.documentElement.classList.toggle('dark');
  
  // Update icons
  const isDark = document.documentElement.classList.contains('dark');
  toggleDarkModeIcons(isDark);
  
  // Update localStorage
  localStorage.setItem('color-theme', isDark ? 'dark' : 'light');
}
