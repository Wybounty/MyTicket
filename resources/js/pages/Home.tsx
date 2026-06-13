import { Head } from '@inertiajs/react';

export default function Home() {

    return (
        <>
            <Head title="Home" />
            <section className="flex flex-col items-center justify-center min-h-screen bg-[#242424] pt-10 pb-10">
                <h1>MyTicket</h1>
                <form className="max-w-3xl mx-auto bg-white p-8 rounded-xl shadow-md space-y-6 text-black">

                    <h2 className="text-2xl font-bold text-gray-800">
                        Créer une demande de ticket
                    </h2>

                    <div className="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div>
                        <label className="block text-sm font-medium text-gray-700 mb-1">
                            Nom
                        </label>
                        <input
                            type="text"
                            name="nom"
                            placeholder="Nom"
                            className="w-full border rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500"
                            required
                        />
                        </div>

                        <div>
                        <label className="block text-sm font-medium text-gray-700 mb-1">
                            Prénom
                        </label>
                        <input
                            type="text"
                            name="prenom"
                            placeholder="Prénom"
                            className="w-full border rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500"
                            required
                        />
                        </div>
                    </div>

                    <div className="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div>
                        <label className="block text-sm font-medium text-gray-700 mb-1">
                            E-mail
                        </label>
                        <input
                            type="email"
                            name="email"
                            placeholder="Email"
                            className="w-full border rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500"
                            required
                        />
                        </div>

                        <div>
                        <label className="block text-sm font-medium text-gray-700 mb-1">
                            Téléphone
                        </label>
                        <input
                            type="tel"
                            name="telephone"
                            placeholder="Téléphone"
                            className="w-full border rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500"
                            required
                        />
                        </div>
                    </div>

                    <div>
                        <label className="block text-sm font-medium text-gray-700 mb-1">
                            Catégorie du produit
                        </label>

                        <select
                        name="produit"
                        className="w-full border rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500"
                        required
                        >
                        <option value="">Sélectionner une catégorie</option>
                        <option value="1">Informatique</option>
                        <option value="2">Imprimante</option>
                        <option value="3">Téléphonie</option>
                        </select>
                    </div>
                    <div className="grid grid-cols-4 gap-4">

                        <label className="cursor-pointer">
                            <input
                            type="radio"
                            name="typeProduit"
                            value="ordinateur"
                            className="peer hidden"
                            defaultChecked
                            />

                            <div className="aspect-square border-2 rounded-lg overflow-hidden peer-checked:border-blue-500 peer-checked:bg-blue-50">
                            <img
                                src="/ordinateur.png"
                                alt="Ordinateur"
                                className="w-full h-full object-cover"
                            />
                            </div>

                            <p className="mt-2 text-center font-medium">
                            Ordinateur
                            </p>
                        </label>

                        <label className="cursor-pointer">
                            <input
                            type="radio"
                            name="typeProduit"
                            value="imprimante"
                            className="peer hidden"
                            />

                            <div className="aspect-square border-2 rounded-lg overflow-hidden peer-checked:border-blue-500 peer-checked:bg-blue-50">
                            <img
                                src="/imprimante.png"
                                alt="Imprimante"
                                className="w-full h-full object-cover"
                            />
                            </div>

                            <p className="mt-2 text-center font-medium">
                            Imprimante
                            </p>
                        </label>

                        <label className="cursor-pointer">
                            <input
                            type="radio"
                            name="typeProduit"
                            value="telephone"
                            className="peer hidden"
                            />

                            <div className="aspect-square border-2 rounded-lg overflow-hidden peer-checked:border-blue-500 peer-checked:bg-blue-50">
                            <img
                                src="/telephone.png"
                                alt="Téléphone"
                                className="w-full h-full object-cover"
                            />
                            </div>

                            <p className="mt-2 text-center font-medium">
                            Téléphone
                            </p>
                        </label>

                        <label className="cursor-pointer">
                            <input
                            type="radio"
                            name="typeProduit"
                            value="ecran"
                            className="peer hidden"
                            />

                            <div className="aspect-square border-2 rounded-lg overflow-hidden peer-checked:border-blue-500 peer-checked:bg-blue-50">
                            <img
                                src="/ecran.png"
                                alt="Écran"
                                className="w-full h-full object-cover"
                            />
                            </div>

                            <p className="mt-2 text-center font-medium">
                            Écran
                            </p>
                        </label>

                        </div>

                    <div>
                        <label className="block text-sm font-medium text-gray-700 mb-1">
                            Sujet du ticket
                        </label>

                        <select
                        name="sujet"
                        className="w-full border rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500"
                        required
                        >
                        <option value="">Sélectionner un sujet</option>
                        <option value="1">Problème de connexion</option>
                        <option value="2">Problème de performance</option>
                        <option value="3">Problème de sécurité</option>
                        </select>
                    </div>

                    <div>
                        <label className="block text-sm font-medium text-gray-700 mb-1">
                        Description du problème
                        </label>
                        <textarea
                        name="description"
                        placeholder="Description du problème"
                        rows={6}
                        className="w-full border rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500 resize-none"
                        required
                        />
                    </div>

                    <div>
                        <label className="block text-sm font-medium text-gray-700 mb-1">
                        Pièce jointe (optionnel)
                        </label>
                        <input
                        type="file"
                        name="piece_jointe"
                        placeholder="Pièce jointe (optionnel)"
                        className="w-full border rounded-lg px-4 py-2"
                        />
                    </div>

                    <div className="flex justify-end">
                        <button
                        type="submit"
                        className="bg-blue-600 hover:bg-blue-700 text-white font-medium px-6 py-3 rounded-lg transition"
                        >
                        Envoyer le ticket
                        </button>
                    </div>

                    </form>
            </section>
        </>
    );
}
