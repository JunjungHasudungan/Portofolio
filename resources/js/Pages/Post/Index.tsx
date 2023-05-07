import React from "react";
import Authenticated from "@/Layouts/AuthenticatedLayout";
import { Link, Head } from "@inertiajs/react";
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout';


// create function component
 export default function Post(props){
     return (
    //     <AuthenticatedLayout
    //     user={auth.user}
    //     header={<h2 className="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">Dashboard</h2>}
    // >
        // <Head title="Dashboard" />
        <p>Testing Post</p>
    );
 }
