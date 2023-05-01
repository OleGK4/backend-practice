<?php

namespace Controller;

use Model\Group;
use Model\Group_subject;
use Src\Request;
use Src\View;

class Groups
{
    public function chooseCourseGroups(): string
    {
        return (new View())->render('site.groups.choose_course_groups');

    }

    public function groupsOnCourse(Request $request): string
    {
        if ($request->method === 'GET') {
            $groups = Group::where('course', $_GET['course'])->get();
        }
        return (new View())->render('site.groups.groups_on_course', ['groups' => $groups]);
    }

    public function groupCard(Request $request): string
    {
        if ($request->method === 'GET') {
            $group = Group::where('id', $_GET['id'])->first();
        }
        return (new View())->render('site.groups.group_card', ['group' => $group]);
    }

    public function groupEdit(): string
    {
        return (new View())->render('site.groups.group_edit');

    }

    public function groupChooseSemester(): string
    {
        return (new View())->render('site.groups.group_choose_semester');
    }

    public function groupSubjects(Request $request): string // BROKEN
    {

        $groupSubjects = Group_subject::where(['semester' => $request->semester, 'group_id' => $request->group_id])->get();
        return (new View())->render('site.groups.group_subjects', ['groupsubjects' => $groupSubjects]);
    }
}