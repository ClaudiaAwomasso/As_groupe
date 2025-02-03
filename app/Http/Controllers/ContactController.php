<?php

namespace App\Http\Controllers;

 use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;



class ContactController extends Controller
{

    // Afficher le formulaire de contact
     public function showForm()/* showForm*/
    {
        return view('home.contact');
    }

//  // Gérer l'envoi du formulaire
//  public function sendEmail(Request $request)
//  {
//      // Validation des données
//      $validatedData = $request->validate([
//          'name' => 'required|string|max:255',
//          'email' => 'required|email',
//          'phone' => 'nullable|numeric',
//          'subject' => 'required|string|max:255',
//          'message' => 'required|string',
//      ]);

//       // Envoyer l'email
//       Mail::send([], [], function ($message) use ($validatedData) {
//          $message->to('asgroupe12@gmail.com') // Adresse Gmail configurée
//                 ->subject($validatedData['subject'])
//                 // ->setBody("
//                 ->setBody(new \Symfony\Component\Mime\Part\TextPart("
//                     Nom : {$validatedData['name']}
//                      Email : {$validatedData['email']}
//                     Téléphone : {$validatedData['phone']}
//                      Message : {$validatedData['message']}
//                 ")
//                 );




//     });
//         // Retourner une réponse ou un message de succès
//         return redirect()->back()->with('success', 'Votre message a été envoyé avec succès !');

// }
 // Gérer l'envoi du formulaire
 public function sendEmail(Request $request){
    //valider les données de contact
    $request->validate([
        'name' => 'required|string|max:255',
          'email' => 'required|email',
         'phone' => 'nullable|numeric',
         'subject' => 'required|string|max:255',
         'message' => 'required|string',
    ]);

    // Préparer les données de l'imail
    $data=[
        'name'=> $request->input('name'),
        'email'=> $request->input('email'),
        'phone'=> $request->input('phone'),
        'subject'=> $request->input('subject'),
        'message'=> $request->input('message'),
    ];


    // Vérifie les données avec dd()
    dd($data);
    
    // l'envoie de l'email
    Mail::raw("Nom: {$data['name']}\nEmail: {$data['email']}\nTéléphone: {$data['phone']}\nMessage: {$data['message']}", function ($message) use ($data) {
        $message->to('asgroupe12@gmail.com')
            ->subject($data['subject']);
    });
       // Retourner une réponse ou un message de succès
    return redirect()->back()->with('success', 'Votre message a été envoyé avec succès !');
 }
}
