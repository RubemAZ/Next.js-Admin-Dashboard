import Layout from './layout';
import Header from '../components/Header';
import Footer from '../components/Footer';
export default function Home() {
    return (
        <Layout>
            <Header />
            <main>
                <p>Hello there.</p>
            </main>
            <Footer />
        </Layout>
    );
}