<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArticlesSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('articles')->insert([
            [
                'author_id' => 1,
                'title' => 'Digital Health Tips for Modern Living',
                'slug' => Str::slug('Digital Health Tips for Modern Living'),
                'content' => 'In today\'s digital age, maintaining good health while staying connected is more important than ever. Digital health encompasses the use of technology to improve healthcare outcomes, enhance patient engagement, and streamline medical processes. This comprehensive guide explores various aspects of digital health and provides practical tips for integrating healthy habits into your daily digital routine. From managing screen time to utilizing health apps, learn how to harness technology for better wellness. Digital wellness is not just about reducing screen time; it\'s about using technology mindfully. Start by setting boundaries on your device usage, taking regular breaks, and practicing the 20-20-20 rule: every 20 minutes, look at something 20 feet away for 20 seconds. This simple exercise helps reduce digital eye strain and fatigue. Additionally, invest in ergonomic furniture to maintain proper posture while working on computers. Consider using apps that track your sleep patterns, monitor your activity levels, and provide reminders for hydration and movement breaks throughout the day.',
                'thumbnail' => 'https://images.unsplash.com/photo-1576091160550-2173dba999ef?w=800&h=400&fit=crop',
                'views' => 250,
                'published_at' => now(),
                'status' => 'published',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'author_id' => 2,
                'title' => 'Disease Prevention Strategies for Children',
                'slug' => Str::slug('Disease Prevention Strategies for Children'),
                'content' => 'Prevention is always better than cure, especially when it comes to children\'s health. Building a strong immune system early in life sets the foundation for lifelong wellness. This article discusses comprehensive approaches to disease prevention, including proper vaccination schedules, nutritional guidelines, and lifestyle habits that protect our youngest members of society. Immunization is one of the most important aspects of preventive healthcare for children. Vaccines protect against serious and potentially life-threatening diseases such as measles, polio, and whooping cough. It is crucial to follow the recommended immunization schedule provided by your pediatrician. Beyond vaccines, a balanced diet rich in fruits, vegetables, and lean proteins strengthens immune function. Encourage children to stay physically active through play and sports, as regular exercise boosts immunity and reduces the risk of chronic diseases. Proper hygiene practices, including handwashing, dental care, and regular bathing, create barriers against infections. Additionally, ensure children get adequate sleep—typically 8-10 hours per night—as rest is essential for immune system development and overall health.',
                'thumbnail' => 'https://images.unsplash.com/photo-1576091160550-2173dba999ef?w=800&h=400&fit=crop',
                'views' => 180,
                'published_at' => now(),
                'status' => 'published',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'author_id' => 4,
                'title' => 'Managing Work-Related Stress for Better Health',
                'slug' => Str::slug('Managing Work-Related Stress for Better Health'),
                'content' => 'Work-related stress is one of the most common health challenges faced by professionals today. When left unmanaged, stress can lead to both mental and physical health problems. Understanding stress triggers and implementing effective coping strategies is essential for maintaining overall wellbeing and productivity. Stress manifests differently in different people. Some experience physical symptoms like headaches, muscle tension, and digestive issues, while others may suffer from anxiety, depression, or sleep disturbances. Identifying your personal stress symptoms is the first step toward managing them effectively. Several evidence-based techniques can help manage work stress: First, establish clear boundaries between work and personal time. Set specific working hours and stick to them, allowing your mind to rest during off-hours. Second, practice mindfulness and meditation—even 10 minutes daily can significantly reduce stress levels. Third, maintain regular physical activity as exercise releases endorphins, natural mood elevators. Fourth, ensure adequate sleep and nutrition as these fundamentals support mental resilience. Finally, cultivate strong social connections both inside and outside the workplace, as meaningful relationships provide crucial emotional support durante challenging times.',
                'thumbnail' => 'https://images.unsplash.com/photo-1506126613408-eca07ce68773?w=800&h=400&fit=crop',
                'views' => 140,
                'published_at' => now()->subDays(2),
                'status' => 'published',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'author_id' => 5,
                'title' => 'Complete Guide to Balanced Nutrition for Beginners',
                'slug' => Str::slug('Complete Guide to Balanced Nutrition for Beginners'),
                'content' => 'Proper nutrition is fundamental to good health, yet many people struggle to understand what constitutes a balanced diet. This guide simplifies nutrition science and provides practical eating strategies that anyone can implement. A balanced diet is not about strict restrictions or eliminating foods you love; rather, it\'s about finding the right proportion of different nutrients your body needs. The basic food groups include carbohydrates, proteins, fats, vitamins, minerals, and water. Carbohydrates provide energy and should come from whole grains, legumes, and vegetables rather than refined sources. Proteins are essential for muscle repair and growth—sources include lean meats, fish, eggs, dairy, and plant-based options like beans. Healthy fats from avocados, nuts, and olive oil support brain function and hormone production. Vitamins and minerals from colorful fruits and vegetables combat disease and support all bodily functions. Practical tips for balanced eating: start by filling half your plate with vegetables and fruits, one quarter with lean protein, and one quarter with whole grains. Drink at least 8 glasses of water daily, limit added sugars and salt, and practice portion control. Meal planning and preparation help maintain consistency, while mindful eating—paying attention to hunger cues and eating slowly—prevents overeating. Remember, small sustainable changes lead to lasting results better than extreme dietary shifts.',
                'thumbnail' => 'https://images.unsplash.com/photo-1490645935967-10de6ba17061?w=800&h=400&fit=crop',
                'views' => 210,
                'published_at' => now()->subDays(3),
                'status' => 'published',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'author_id' => 3,
                'title' => 'Senior Health Care Tips: Living Well at Home',
                'slug' => Str::slug('Senior Health Care Tips: Living Well at Home'),
                'content' => 'As we age, maintaining good health requires special attention to preventive care and lifestyle modifications. This article provides comprehensive guidance for seniors seeking to maintain independence and quality of life while managing health conditions at home. Regular medical check-ups are crucial for early detection of age-related conditions. Adults over 65 should monitor blood pressure, cholesterol levels, and blood glucose regularly as recommended by healthcare providers. Daily health monitoring at home using blood pressure monitors or glucose meters helps track trends and identify potential issues early. Medication management is critical—organize pills using pill organizers, set reminders for doses, and maintain a list of all medications and supplements to share with healthcare providers. Physical activity is essential for maintaining strength, balance, and mobility. Seniors should aim for at least 150 minutes of moderate-intensity activity per week, including strength training to prevent falls and maintain independence. Simple activities like walking, swimming, or yoga adapted for seniors are beneficial. Nutrition becomes even more important as we age. Seniors should focus on nutrient-dense foods, adequate protein to prevent muscle loss, and sufficient calcium and vitamin D for bone health. Social engagement and mental stimulation through hobbies, family time, and cognitive activities help prevent cognitive decline. Finally, maintain a safe home environment by removing tripping hazards, installing grab bars in bathrooms, and ensuring adequate lighting.',
                'thumbnail' => 'https://images.unsplash.com/photo-1576091160550-2173dba999ef?w=800&h=400&fit=crop',
                'views' => 95,
                'published_at' => now()->subDay(),
                'status' => 'published',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'author_id' => 1,
                'title' => 'When and Why You Need Laboratory Tests',
                'slug' => Str::slug('When and Why You Need Laboratory Tests'),
                'content' => 'Laboratory tests are essential diagnostic tools that provide valuable information about your health status. Understanding when to get tested and what different tests measure helps you take proactive steps toward preventive healthcare. Laboratory tests serve multiple purposes: they screen for diseases, diagnose conditions, monitor treatment effectiveness, and assess overall health. Different tests are recommended at different life stages and based on individual risk factors. Children should receive routine screening as part of their well-child visits, while adolescents and young adults benefit from baseline health measurements. Adults should schedule periodic health checks including blood count, metabolic panel, and cholesterol screening. Frequency increases with age or existing health conditions. Common laboratory tests include: Complete Blood Count (CBC) which checks for anemia and infections, Metabolic Panel which assesses kidney and liver function plus glucose levels, Lipid Panel which measures cholesterol and triglycerides, and Thyroid Function Tests which evaluate metabolic function. Age-appropriate screening includes mammograms for women over 40-50, colonoscopy for those over 50, and bone density scans for postmenopausal women or men over 70. Your doctor considers your personal and family medical history, lifestyle factors, and current symptoms when recommending tests. Some tests require fasting or specific preparation, so follow your doctor\'s instructions carefully. Regular laboratory testing, combined with a healthy lifestyle, enables early detection of diseases when treatment is most effective.',
                'thumbnail' => 'https://images.unsplash.com/photo-1576091160550-2173dba999ef?w=800&h=400&fit=crop',
                'views' => 130,
                'published_at' => now()->subHours(12),
                'status' => 'published',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
