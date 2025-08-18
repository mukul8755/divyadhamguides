<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    private $blogs = [
        1 => [
            "title" => "Kashi: The Spiritual Heart of India",
            "author" => "Basant Mishra",
            "date" => "10 June 2025, 10:00 AM",
            "image" => "images/blog/kashi-spiritual.jpg",
            "excerpt" => "Varanasi, or Kashi, is one of the world’s oldest living cities...",
            "content" => "Varanasi, or Kashi, is one of the world’s oldest living cities. It’s believed that Lord Shiva himself founded this city. Every street, ghat, and temple resonates with sacred energy. The Ganga flows gracefully, echoing centuries of devotion and prayer. From morning boat rides to the mesmerizing Ganga Aarti at Dashashwamedh Ghat, the city never sleeps spiritually. In Kashi, one doesn’t just witness spirituality — they experience it. Whether through darshan at Kashi Vishwanath Mandir or Vedic rituals, this place transforms lives."
        ],
        2 => [
            "title" => "Ram Mandir: A Sacred Journey Through Centuries",
            "author" => "Anshu Kumari Pandey",
            "date" => "05 August 2025, 12:00 PM",
            "image" => "images/blog/ram-mandir.jpg",
            "excerpt" => "The Ram Mandir in Ayodhya isn't just a temple...",
            "content" => "The Ram Mandir in Ayodhya isn't just a temple — it's a timeless symbol of faith, devotion, and resilience. Located on the banks of the Sarayu, it marks the birthplace of Lord Ram. Its history stretches back centuries, witnessing devotion, disputes, and legal battles. The temple’s Nagara-style architecture, intricate carvings, and sanctum sanctorum reflect ancient traditions blended with modern excellence. Today, Ram Mandir stands as a beacon of unity, peace, and cultural heritage for millions worldwide."
        ],
        3 => [
            "title" => "Ayodhya’s Ram Mandir: A Divine Rebirth",
            "author" => "Aryan Dubey",
            "date" => "15 June 2025, 01:30 PM",
            "image" => "images/blog/ram-mandir2.webp",
            "excerpt" => "Ayodhya is not just a city — it’s the birthplace of Shri Ram...",
            "content" => "Ayodhya, the birthplace of Maryada Purushottam Shri Ram, is now witnessing a spiritual and cultural renaissance with the grand Ram Mandir. Devotees across the globe pour in to offer reverence and relive the values of Dharma. The temple’s architecture, infused with ancient Indian traditions, stands as a symbol of devotion and perseverance. Walking through its corridors, one doesn’t just see stones — they feel generations of prayers carved into them."
        ],
        4 => [
            "title" => "Triveni Sangam: Gateway to Moksha",
            "author" => "Basant Mishra",
            "date" => "20 June 2025, 06:15 AM",
            "image" => "images/blog/triveni-sangam.jpg",
            "excerpt" => "The confluence of Ganga, Yamuna, and Saraswati...",
            "content" => "At Prayagraj, the Triveni Sangam — confluence of Ganga, Yamuna, and the invisible Saraswati — is among the holiest sites. Pilgrims believe that a dip here washes away sins and prepares the soul for moksha. Whether during Kumbh Mela or on a regular day, Sangam’s aura is deeply transformative. Sunrise boat rides and early morning Ganga Aarti create unforgettable spiritual experiences."
        ],
        5 => [
            "title" => "Why Rituals Matter: The Science Behind Faith",
            "author" => "Aryan Dubey",
            "date" => "25 June 2025, 07:00 PM",
            "image" => "images/blog/faith.webp",
            "excerpt" => "Many people perform poojas, but few understand their deeper meaning...",
            "content" => "Vedic rituals like Rudrabhishek, Shraddh, and Pitru Tarpan aren’t just acts of devotion but tools for mental purification and ancestral harmony. These rituals balance energies, purify the mind, and strengthen faith. Our organization ensures that these sacred acts are performed by knowledgeable purohits in the most authentic way, giving devotees peace of mind and spiritual satisfaction."
        ],
        6 => [
            "title" => "Temple Etiquette for Tourists",
            "author" => "Basant Mishra",
            "date" => "01 July 2025, 08:20 AM",
            "image" => "images/blog/quick-guide.webp",
            "excerpt" => "Visiting temples is divine, but it’s important to follow etiquette...",
            "content" => "Visiting temples is a divine experience, but certain etiquettes must be observed: remove footwear before entering, avoid using mobile phones, dress modestly, and maintain silence in sanctums. Our guides help tourists understand these practices while also explaining temple stories, architecture, deities, and rituals, making the entire experience deeply meaningful."
        ],
        7 => [
            "title" => "Ayodhya Tour Packages",
            "author" => "Aryan Dubey",
            "date" => "25 June 2025, 07:00 PM",
            "image" => "images/blog/ayodhya_journey.jpg",
            "excerpt" => "Experience the divine aura of Shri Ram Janmabhoomi and beyond...",
            "content" => "Our Ayodhya tour packages offer a perfect blend of spirituality, history, and culture. Visit Shri Ram Janmabhoomi, Hanuman Garhi, and the sacred Saryu Ghats. Well-planned itineraries, comfortable stays, and guided visits ensure that your journey to Ayodhya is not only divine but unforgettable."
        ],
        8 => [
            "title" => "Kashi/Banaras Tour Packages",
            "author" => "Aryan Dubey",
            "date" => "25 June 2025, 07:15 PM",
            "image" => "images/blog/kashi-spiritual.jpg",
            "excerpt" => "Discover the spiritual capital of India — Kashi...",
            "content" => "Kashi, the eternal city, offers a soul-enriching journey into the heart of Sanatan Dharma. From the iconic Ganga Aarti at Dashashwamedh Ghat to darshan at Kashi Vishwanath Temple, our packages take care of every detail so devotees can focus entirely on their spiritual experience."
        ],
        9 => [
            "title" => "Prayagraj Tour Packages",
            "author" => "Aryan Dubey",
            "date" => "25 June 2025, 07:30 PM",
            "image" => "images/blog/triveni-sangam.jpg",
            "excerpt" => "Witness the sacred confluence of Triveni Sangam...",
            "content" => "Our Prayagraj tour packages include holy dips at Triveni Sangam, rituals, Akshayvat darshan, and visits to historic temples. Each journey is designed for devotees seeking divine blessings, peace, and spiritual rejuvenation."
        ],
        10 => [
            "title" => "Ayodhya with Chhapiya Tour Packages",
            "author" => "Aryan Dubey",
            "date" => "25 June 2025, 07:45 PM",
            "image" => "images/blog/chhapiya.jpeg",
            "excerpt" => "Explore both Ayodhya and Chhapiya in a single sacred journey...",
            "content" => "This package covers Ayodhya — birthplace of Shri Ram — and Chhapiya, birthplace of Swaminarayan. It offers a rare opportunity to connect with both Ram Bhakti and the Swaminarayan tradition. Guided visits and comfortable arrangements make the experience spiritually fulfilling."
        ],
        11 => [
            "title" => "Ayodhya with Patan Devi Tour Packages",
            "author" => "Aryan Dubey",
            "date" => "25 June 2025, 08:00 PM",
            "image" => "images/blog/devi.jpg",
            "excerpt" => "Experience Ayodhya along with Patan Devi Shaktipeeth...",
            "content" => "This package combines the devotion of Ayodhya with the divine energy of Patan Devi Temple, one of the 51 Shaktipeeths. Perfect for devotees seeking blessings of both Bhagwan Ram and Maa Durga, our tours ensure a comfortable, well-organized, and spiritually uplifting journey."
        ]
    ];


    public function index()
    {
        $blogs = $this->blogs;
        return view('blogs.index', compact('blogs'));
    }

    public function show($id)
    {
        $blog = $this->blogs[$id] ?? null;

        if (!$blog) {
            abort(404);
        }

        return view('blogs.show', compact('blog'));
    }
}
