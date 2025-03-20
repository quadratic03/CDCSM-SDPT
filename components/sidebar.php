<?php
function renderSidebar($userType, $currentPage) {

    $links = [ 
        'admin' => [
            ['href' => 'admin_dashboard.php', 'icon' => 'fas fa-home', 'text' => 'Home', 'active' => $currentPage === 'admin_dashboard.php'],
            ['href' => 'admin_SSS.php', 'icon' => 'fas fa-user-graduate', 'text' => 'Students Scholar Status', 'active' => $currentPage === 'admin_SSS.php'],
            ['href' => 'admin_announcement.php', 'icon' => 'fas fa-bullhorn', 'text' => 'Announcement', 'active' => $currentPage === 'admin_announcement.php'],
            ['href' => 'admin_SSSL.php', 'icon' => 'fas fa-list-alt', 'text' => 'Students Scholar Submission List', 'active' => $currentPage === 'admin_SSSL.php'],
            ['href' => 'admin_RSA.php', 'icon' => 'fas fa-users', 'text' => 'Return Service Activity', 'active' => $currentPage === 'admin_RSA.php'],
            ['href' => 'admin_ars.php', 'icon' => 'fas fa-money-bill-wave', 'text' => 'Allowance Releasing Schedule', 'active' => $currentPage === 'admin_ars.php'],
            ['href' => 'archive.php', 'icon' => 'fas fa-archive', 'text' => 'Archive', 'active' => $currentPage === 'archive.php'],
            ['href' => 'admin_editst.php', 'icon' => 'fas fa-user', 'text' => 'Staff Account', 'active' => $currentPage === 'admin_editst.php'],
            ['href' => 'admin_editstud.php', 'icon' => 'fas fa-user-circle', 'text' => 'Student Account', 'active' => $currentPage === 'admin_editstud.php'],
            ['href' => 'admin_ssc.php', 'icon' => 'fas fa-question-circle', 'text' => 'Student Scholar Concern', 'active' => $currentPage === 'admin_ssc.php'],
        ],
        'staff' => [
            ['href' => 'staff_dashboard.php', 'icon' => 'fas fa-home', 'text' => 'Home', 'active' => $currentPage === 'staff_dashboard.php'],
            ['href' => 'student_scholar_status.php', 'icon' => 'fas fa-user-graduate', 'text' => 'Students Scholar Status', 'active' => $currentPage === 'student_scholar.status.php'],
            ['href' => 'staff_announcement.php', 'icon' => 'fas fa-bullhorn', 'text' => 'Announcement', 'active' => $currentPage === 'staff_announcement.php'],
            ['href' => 'student_scholar_sub.php', 'icon' => 'fas fa-list-alt', 'text' => 'Students Scholar Submission List', 'active' => $currentPage === 'student_scholar_sub.php'],
            ['href' => 'staff_rsa.php', 'icon' => 'fas fa-users', 'text' => 'Return Service Activity', 'active' => $currentPage === 'staff_rsa.php'],
            ['href' => 'staff_Ars.php', 'icon' => 'fas fa-money-bill-wave', 'text' => 'Allowance Releasing Schedule', 'active' => $currentPage === 'staff_Ars.php'],
            ['href' => 'staff_profile.php', 'icon' => 'fas fa-user', 'text' => 'Profile', 'active' => $currentPage === 'staff_profile.php'],
            ['href' => 'student_concern.php', 'icon' => 'fas fa-question-circle', 'text' => 'Student Scholar Concern', 'active' => $currentPage === 'student_concern.php'],
        ],
        'student' => [
            ['href' => 'student_dashboard.php', 'icon' => 'fas fa-home', 'text' => 'Home', 'active' => $currentPage === 'student_dashboard.php'],
            ['href' => 'Student_Status.php', 'icon' => 'fas fa-user-graduate', 'text' => 'Student Status', 'active' => $currentPage === 'Student_Status.php'],
            ['href' => 'Student_Submission_Form.php', 'icon' => 'fas fa-file-alt', 'text' => 'Submission Form', 'active' => $currentPage === 'Student_Submission_Form.php'],
            ['href' => 'calendar.php', 'icon' => 'fas fa-calendar-alt', 'text' => 'Calendar', 'active' => $currentPage === 'calendar.php'],
            ['href' => 'announcement.php', 'icon' => 'fas fa-bullhorn', 'text' => 'Announcement', 'active' => $currentPage === 'announcement.php'],
            ['href' => 'inbox.php', 'icon' => 'fas fa-inbox', 'text' => 'Inbox', 'active' => $currentPage === 'inbox.php'],
            ['href' => 'Student_Concern.php', 'icon' => 'fas fa-question-circle', 'text' => 'Student Concerns', 'active' => $currentPage === 'Student_Concern.php'],
            ['href' => 'Student_Send_Grades.php', 'icon' => 'fas fa-paper-plane', 'text' => 'Send Grades', 'active' => $currentPage === 'Student_Send_Grades.php'],
            ['href' => 'AllowanceReleasing.php', 'icon' => 'fas fa-money-bill-wave', 'text' => 'Allowance Releasing Schedule', 'active' => $currentPage === 'AllowanceReleasing.php'],
            ['href' => 'profile.php', 'icon' => 'fas fa-user', 'text' => 'Profile', 'active' => $currentPage === 'profile.php'],
        ],
    ];

    echo '<div class="sidebar">';
    echo '<div class="logo"><img src="logonimichael.png" alt="Logo"></div>';
    echo '<ul>';
    foreach ($links[$userType] as $link) {
        $activeClass = $link['active'] ? ' class="active"' : '';
        echo '<li><a href="' . $link['href'] . '"' . $activeClass . '><i class="' . $link['icon'] . '"></i> <span>' . $link['text'] . '</span></a></li>';
    }
    echo '</ul>';
    echo '</div>';
}
?>
