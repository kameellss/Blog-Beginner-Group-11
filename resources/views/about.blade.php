@extends('layouts.app')

@section('content')
<div class="about-section" style="background-color: #f8f9fa; padding: 60px 20px;">
    <div class="container" style="max-width: 800px; margin: 0 auto;">
        <h1 class="text-center" style="color: #ee99c2; font-family: 'Arial', sans-serif; font-weight: 700; margin-bottom: 40px;">About Us</h1>
        <p class="text-center" style="color: #555; font-size: 1.2em; line-height: 1.6; margin-bottom: 40px;">
            Welcome to our team! We are a group of professionals dedicated to excellence in our respective fields, working together to create impactful solutions and meaningful experiences.
        </p>
        
        <div class="team-members">
            <!-- Team Member 1 -->
            <div class="member mb-4" style="background: #ffffff; border: 1px solid #ddd; border-radius: 10px; padding: 20px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);">
                <h3 style="color: #333; font-family: 'Arial', sans-serif; font-weight: 600;">Teodulus Vallent</h3>
                <p style="color: #666; font-size: 1em; line-height: 1.6;">
                    Lead Developer with expertise in backend technologies and system architecture. Passionate about building scalable systems.
                </p>
            </div>
            
            <!-- Team Member 2 -->
            <div class="member mb-4" style="background: #ffffff; border: 1px solid #ddd; border-radius: 10px; padding: 20px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);">
                <h3 style="color: #333; font-family: 'Arial', sans-serif; font-weight: 600;">Azkia Aulia Barus</h3>
                <p style="color: #666; font-size: 1em; line-height: 1.6;">
                    UI/UX Designer passionate about creating intuitive and aesthetic designs that enhance user experience.
                </p>
            </div>
            
            <!-- Team Member 3 -->
            <div class="member mb-4" style="background: #ffffff; border: 1px solid #ddd; border-radius: 10px; padding: 20px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);">
                <h3 style="color: #333; font-family: 'Arial', sans-serif; font-weight: 600;">Stephanie Marito</h3>
                <p style="color: #666; font-size: 1em; line-height: 1.6;">
                    Content Creator skilled in crafting engaging articles and managing social media presence with impactful strategies.
                </p>
            </div>
            
            <!-- Team Member 4 -->
            <div class="member mb-4" style="background: #ffffff; border: 1px solid #ddd; border-radius: 10px; padding: 20px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);">
                <h3 style="color: #333; font-family: 'Arial', sans-serif; font-weight: 600;">Kamilia Luthfitah</h3>
                <p style="color: #666; font-size: 1em; line-height: 1.6;">
                    Marketing Specialist with a focus on brand growth, digital campaigns, and delivering measurable results.
                </p>
            </div>
        </div>
    </div>
</div>
@endsection
