<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DestinationController extends Controller
{
    private $destinations = [
        1 => [
            "title" => "Kashi Darshan",
            "image" => "images/kashipic.jpg",
            "intro" => "<b>Kashi (Varanasi)</b>, the spiritual capital of India, is one of the oldest living cities in the world...",
            "attractions" => [
                ["img" => "images/kashiV.jfif", "title" => "Kashi Vishwanath Temple", "desc" => "One of the 12 Jyotirlingas..."],
                ["img" => "images/dashashwamedh.jpg", "title" => "Dashashwamedh Ghat", "desc" => "Witness the grandeur of Ganga Aarti..."],
                ["img" => "images/sanakt mochan hanuman jii.webp", "title" => "Sankat Mochan Mandir", "desc" => "Devoted to Lord Hanuman..."],
                ["img" => "images/manikarnikaa.webp", "title" => "Manikarnika Ghat", "desc" => "Sacred cremation ghat..."],
            ],
            "packages" => "Our packages are designed to give you an unforgettable experience of the sacred city of Kashi...",
            "activities" => [
                "Boat ride during sunrise on the Ganges",
                "Participation in Ganga Aarti",
                "Local food tasting – Kachori Sabzi, Lassi, Banarasi Paan",
                "Shopping for Banarasi Sarees and handicrafts"
            ]
        ],
        2 => [
            "title" => "Ayodhya Darshan",
            "image" => "images/Ayodhya_Ram_Mandir_Inauguration_Day_Picture.jpg",
            "intro" => "<b>Ayodhya,</b> the birthplace of Lord Shri Ram, is a sacred city filled with devotion...",
            "attractions" => [
                ["img" => "images/ayodhya/shriramjanmbhoomi.jpg", "title" => "Shri Ram Janmabhoomi Mandir", "desc" => "The heart of Ayodhya..."],
                ["img" => "images/ayodhya/hanuman garhi.jpg", "title" => "Hanuman Garhi", "desc" => "Ancient temple of Lord Hanuman."],
                ["img" => "images/ayodhya/saryu r.jpg", "title" => "Saryu River Ghat", "desc" => "Holy river with divine Aarti..."],
                ["img" => "images/ayodhya/1-kanak-bhawan-ayodhya.jpg", "title" => "Kanak Bhawan", "desc" => "Temple of Ram-Sita..."],
                ["img" => "images/ayodhya/Prachin-Surya-Kund-Mandir.jpg", "title" => "Surya Kund", "desc" => "Water tank associated with Surya Dev..."],
                ["img" => "images/ayodhya/guptar ghat.jpg", "title" => "Guptar Ghat", "desc" => "Where Lord Ram took Jal Samadhi..."],
            ],
            "packages" => "Explore Ayodhya’s divine temples and spiritual sites with complete guidance and local hospitality.",
            "activities" => [
                "Boat ride during sunrise on the Saryu",
                "Attend Ramayana recitation or Bhajans",
                "Participate in evening Saryu Aarti",
                "Walk through Ram Ki Paidi and nearby ghats"
            ],
            "additional_attractions" => [
                ["img" => "images/ayodhya/chhapiya temple1.jpeg", "title" => "Chhapiya Temple (Gonda)", "desc" => "Birthplace of Swaminarayan."],
                ["img" => "images/ayodhya/devi patan mandir.jpg", "title" => "Devipatan Temple (Balrampur)", "desc" => "Shaktipeeth of Maa Durga."],
                // Add more if needed
            ],
        ],
        3 => [
            "title" => "Prayagraj Darshan",
            "image" => "images/prayagraj sangam.avif",
            "intro" => "Prayagraj (formerly Allahabad), is one of the holiest cities of India, where the sacred confluence of the Ganga, Yamuna, and the mythical Saraswati rivers takes place. This city hosts the Kumbh Mela, the world's largest spiritual gathering. A visit to Prayagraj offers divine peace, historic temples, and spiritual awakening",
            "attractions" => [
              
                
                ["img" => "images/prayagraj/triveni sangam.jpg", "title" => "Triveni Sangam", "desc" => "Ancient temple of Lord Hanuman."],

                ["img" => "images/prayagraj/hanuman-ji-mandir-in-prayagraj.jpg", "title" => "Bade Hanuman Ji", "desc" => "A unique lying posture idol of Lord Hanuman, submerged during high tide – extremely revered."],

                ["img" => "images/prayagraj/akshayavat.jpg", "title" => "Akshay Vat", "desc" => "Immortal Banyan tree inside the Allahabad Fort – a sacred site of divine importance."],

                ["img" => "images/prayagraj/Shankar-Viman-Mandapam.jpg", "title" => "Shankar Viman Mandapam", "desc" => "A South Indian-style temple dedicated to Lord Shiva near Sangam – known for its beautiful carvings."],

                ["img" => "images/prayagraj/alopi mandir.avif", "title" => "Alopi Devi Mandir", "desc" => "Also known as Alop Shankari, a unique Shakti Peetha where no idol exists, only a wooden carriage."],

                ["img" => "images/prayagraj/The-Nag-Vasuki-temple.jpg", "title" => "Nagvasuki Temple", "desc" => "An ancient temple dedicated to Vasuki Nag, located on the banks of the Ganga."],

            ],
            "packages" => "Explore Ayodhya’s divine temples and spiritual sites with complete guidance and local hospitality.",
            "activities" => [
                "Boat ride during sunrise on the Saryu",
                "Attend Ramayana recitation or Bhajans",
                "Participate in evening Saryu Aarti",
                "Walk through Ram Ki Paidi and nearby ghats"
            ]
        ],



    ];

    public function index()
    {
        $destinations = $this->destinations;
        return view('destinations.index', compact('destinations'));
    }

    public function show($id)
    {
        $destination = $this->destinations[$id] ?? null;

        if (!$destination) {
            abort(404);
        }

        return view('destinations.show', compact('destination'));
    }
}
