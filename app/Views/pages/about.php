<h2><a href="<?= base_url('/'); ?>" style="text-decoration: none; color: inherit;">About Me</a></h2>
<div style="background: rgba(255,255,255,0.05); padding: 2rem; border-radius: 8px;">

    <!-- Profile & Bio Wrapper -->
    <div style="display: flex; align-items: flex-start; gap: 2rem; flex-wrap: wrap;">
        <!-- Profile Photo -->
        <div style="flex-shrink: 0; text-align: center; width: 100%; max-width: 180px; margin: 0 auto;">
            <img src="<?= base_url('assets/profile-3.png'); ?>" alt="Profile Photo"
                style="width: 160px; height: 160px; border-radius: 50%; object-fit: cover; border: 3px solid var(--highlight); box-shadow: 0 4px 15px rgba(0,0,0,0.3);">
        </div>

        <!-- Text Content -->
        <div style="flex: 1; min-width: 300px;">
            <p style="margin-bottom: 1rem; font-size: 1.1rem; line-height: 1.8;">
                Hi, I'm <strong>Kei</strong>.
            </p>
            <p style="margin-bottom: 1rem; line-height: 1.8;">
                I am a passionate <strong>Web & Game Developer</strong> focused on building efficient systems.
            </p>
            <p style="margin-bottom: 1rem; line-height: 1.8;">
                Unlike many who just write code, I specialize in <strong>System Maintenance</strong> and ensuring
                applications run smoothly without errors. Whether it's fixing a broken PHP script or optimizing a slow
                database, I deliver results, not just promises.
            </p>
            <p style="margin-bottom: 1rem; line-height: 1.8;">
                Currently sharpening my skills in <strong>Laravel, CI, and Modern Web Technologies</strong> to help your
                business grow.
            </p>
        </div>
    </div>

    <!-- Skills Section (Full Width) -->
    <h3 style="margin-top: 2rem; border-bottom: 1px solid rgba(255,255,255,0.1); padding-bottom: 0.5rem;">Skills & Focus
    </h3>
    <ul style="display: flex; flex-wrap: wrap; gap: 1rem; margin-top: 1rem;">
        <li
            style="background: var(--secondary-color); padding: 5px 15px; border-radius: 20px; border: 1px solid var(--highlight);">
            Web Development (PHP/Laravel/CI)
        </li>
        <li
            style="background: var(--secondary-color); padding: 5px 15px; border-radius: 20px; border: 1px solid var(--highlight);">
            Game Development (Unity/C#)
        </li>
        <li
            style="background: var(--secondary-color); padding: 5px 15px; border-radius: 20px; border: 1px solid var(--highlight);">
            System Maintenance
        </li>
        <li
            style="background: var(--secondary-color); padding: 5px 15px; border-radius: 20px; border: 1px solid var(--highlight);">
            Front-End (HTML/CSS/JS/React)
        </li>
        <li
            style="background: var(--secondary-color); padding: 5px 15px; border-radius: 20px; border: 1px solid var(--highlight);">
            Database Management
        </li>
    </ul>

</div>