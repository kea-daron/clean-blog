// Translation dictionary
const translations = {
  en: {
    home: "Home",
    aboutus: "About Us",
    create: "Create",
    "log-in": "Log in",
    "log-out": "Log out",
    profile: "Profile",
    hello: "Hello",
    register: "Register",
    welcome: "Welcome to Flowbite",
    description:
      "This is a sample page showcasing the navbar with language selection and dark mode functionality. The navbar is responsive and includes a mobile menu with working dropdowns.",
    // welcome: "welcome",
    Explore:"Explore Us",
    a: 
      "A good blog platform provides customization options, SEO tools, and the ability to monetize content",
    b:
      "Make Your Blog Better",
    d:"Dive into a world of fresh ideas, expert tips, and inspiring stories. Our blog is your go-to space for insightful content",
    f:"Explore job opportunities.",
    e:"For iBlog Services",
    g:"All Posts",
    h:"Categories"
  },
  km: {
    home: "ទំព័រដើម",
    aboutus: "អំពីយើង",
    create: "បង្កើត",
    register: "ចុះឈ្មោះ",
    "log-in": "ចូលគណនី",
    "log-out": "ចាកចេញ",
    profile: "ពត៌មានផ្ទាល់ខ្លួន",
    hello: "សួស្តី",
    welcome: "សូមស្វាគមន៍មកកាន់ Flowbite",
    description:
      "នេះគឺជាទំព័រគំរូដែលបង្ហាញពីរបារនាំផ្លូវជាមួយនឹងមុខងារជ្រើសរើសភាសា និងរបៀបងងឹត។ របារនាំផ្លូវមានលក្ខណៈឆ្លើយតបនិងរួមបញ្ចូលម៉ឺនុយចល័តជាមួយនឹងបញ្ជីទម្លាក់ចុះដែលដំណើរការ។",
    // welcome: "សូមស្វាគមន៍"
    Explore:"រុករកពួកយើង",
    a: 
      "វេទិកាប្លក់ដ៏ល្អផ្តល់នូវជម្រើសប្ដូរតាមបំណង ឧបករណ៍ SEO និងសមត្ថភាពក្នុងការរកប្រាក់ពីមាតិកា។",
    b:
     "ធ្វើឱ្យប្លុករបស់អ្នកកាន់តែប្រសើរឡើង",
    d:"ចូលទៅក្នុងពិភពនៃគំនិតថ្មីៗ គន្លឹះអ្នកជំនាញ និងរឿងដែលបំផុសគំនិត។ ប្លក់របស់យើងគឺជាកន្លែងទំនេររបស់អ្នកសម្រាប់មាតិកាដ៏ឈ្លាសវៃ",
    e:"សម្រាប់សេវាកម្ម iBlog",
    f:"ស្វែងរកឱកាសការងារ។",
    g:"ប្រកាសទាំងអស់",
    h:"ប្រភេទ"
  },
};

// Apply translations based on the current language
function applyTranslations(language) {
  const elements = document.querySelectorAll("[data-translate]");
  elements.forEach((element) => {
    const key = element.getAttribute("data-translate");
    if (translations[language] && translations[language][key]) {
      element.textContent = translations[language][key];
    }
  });

  // Update HTML lang attribute
  document.documentElement.lang = language;

  // Update active flag indicator
  updateActiveFlagIndicator(language);

  // Save preference
  localStorage.setItem("language", language);
}

// Update visual indicator for active flag
function updateActiveFlagIndicator(language) {
  // Remove active indicator from all flags
  document.querySelectorAll(".lang-flag").forEach((flag) => {
    flag.classList.remove("ring-2", "ring-yellow-400");
  });

  // Add active indicator to selected language flag
  document
    .querySelectorAll(`.lang-flag[data-lang="${language}"]`)
    .forEach((flag) => {
      flag.classList.add("ring-2", "ring-yellow-400");
    });
}

// Mobile menu functionality
const mobileMenuButton = document.getElementById("mobile-menu-button");
const closeMenuButton = document.getElementById("close-menu-button");
const mobileMenu = document.getElementById("mobile-menu");

if (mobileMenuButton && closeMenuButton && mobileMenu) {
  mobileMenuButton.addEventListener("click", () => {
    mobileMenu.classList.remove("translate-x-full");
  });

  closeMenuButton.addEventListener("click", () => {
    mobileMenu.classList.add("translate-x-full");
  });

  // Close mobile menu when clicking outside
  document.addEventListener("click", (event) => {
    if (
      !mobileMenu.contains(event.target) &&
      event.target !== mobileMenuButton &&
      !mobileMenuButton.contains(event.target)
    ) {
      mobileMenu.classList.add("translate-x-full");
    }
  });
}

// Initialize when DOM is loaded
document.addEventListener("DOMContentLoaded", function () {
  // Set up language flag buttons
  const languageFlags = document.querySelectorAll(".lang-flag");
  languageFlags.forEach((flag) => {
    flag.addEventListener("click", function () {
      const lang = this.getAttribute("data-lang");
      applyTranslations(lang);
    });
  });

  // Load saved language preference
  const savedLanguage = localStorage.getItem("language") || "en";
  applyTranslations(savedLanguage);
});
